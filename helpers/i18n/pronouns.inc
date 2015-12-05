<?php
namespace I18n;

class pronoun_it extends translator 
{
	public $translation_noun2;

	function __construct($identifier, $compact_translation) 
	{
		$parts = explode('|', $compact_translation);
		parent::__construct($identifier, $parts[0]);
		$this->translation_noun2 = $parts[1];
	}

	protected function do_translate($lower_phrase, $translations_before, $translations_after, &$connector, $translation_hints = null) 
	{
		$significant_noun = self::get_significant_noun($translations_before);
		return $significant_noun
			? self::get_translation_for_noun($significant_noun->identifier)
			: $this->translation_noun2;
	}

	protected function get_translation_for_noun($noun_identifier) 
	{
		if ($noun_identifier->form == 'singular') {
			if ($noun_identifier->type == 1)
				return $this->translation;
			if ($noun_identifier->type == 2)
				return $this->translation_noun2;
			throw new \Exception('Invalid noun type: ' . $noun_identifier->type);
		}
		throw new \Exception('Invalid noun form: ' . $noun_identifier->form);
	}

	private static function get_significant_noun($translations_before) 
	{
		foreach (array_reverse($translations_before) as $previous_translation)
			if (self::is_significant_noun($previous_translation))
				return $previous_translation;
		return null;
	}

	private static function is_significant_noun($previous_translation) 
	{
		return $previous_translation->is_noun() 
		&& $previous_translation->identifier->form == 'singular' 
		&& $previous_translation->is_definite;
	}
}

class quantifier extends noun_modifier 
{
}

class definite_marker extends noun_modifier 
{
}
?>