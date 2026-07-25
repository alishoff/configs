<?php
/**
 * Developed by Orkhan Alishov
 *
 * Email: hi@alishoff.com
 * Web: https://alishoff.com/
 */

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$rules = [
    '@PSR1' => true,
    '@PSR2' => true,

    // Alias
    'backtick_to_shell_exec' => true,
    'no_alias_language_construct_call' => true,
    'no_mixed_echo_print' => [
        'use' => 'echo',
    ],

    // Array Notation
    'array_syntax' => ['syntax' => 'short'],
    'no_multiline_whitespace_around_double_arrow' => true,
    'no_trailing_comma_in_singleline_array' => true,
    'no_whitespace_before_comma_in_array' => true,
    'normalize_index_brace' => true,
    'trim_array_spaces' => true,
    'whitespace_after_comma_in_array' => true,

    // Basic
    'braces' => true,
    'encoding' => true,

    // Casing
    'constant_case' => [
        'case' => 'lower',
    ],
    'integer_literal_case' => true,
    'lowercase_keywords' => true,
    'lowercase_static_reference' => true,
    'magic_constant_casing' => true,
    'magic_method_casing' => true,
    'native_function_casing' => true,
    'native_function_type_declaration_casing' => true,

    // Cast Notation
    'cast_spaces' => true,
    'lowercase_cast' => true,
    'no_short_bool_cast' => true,
    'no_unset_cast' => true,
    'short_scalar_cast' => true,

    // Class Notation
    'class_attributes_separation' => [
        'elements' => [
            'const' => 'one',
            'method' => 'one',
            'property' => 'one',
            'trait_import' => 'none',
        ],
    ],
    'class_definition' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_null_property_initialization' => true,
    'ordered_class_elements' => [
        'order' => [
            'use_trait',
            'constant_public',
            'constant_protected',
            'constant_private',
            'property_public',
            'property_protected',
            'property_private',
            'construct',
            'destruct',
            'magic',
            'method_public',
            'method_protected',
            'method_private',
        ],
        'sort_algorithm' => 'none',
    ],
    'protected_to_private' => true,
    'self_static_accessor' => true,
    'single_class_element_per_statement' => true,
    'single_trait_insert_per_statement' => true,
    'visibility_required' => [
        'elements' => ['property', 'method'],
    ],

    // Comment
    'header_comment' => [
        'header' => 'Developed by Orkhan Alishov'.PHP_EOL.'Email: hi@alishoff.com'.PHP_EOL.'Web: https://alishoff.com/',
        'comment_type' => 'PHPDoc',
        'location' => 'after_open',
        'separate' => 'bottom',
    ],
    'multiline_comment_opening_closing' => true,
    'no_empty_comment' => true,
    'no_trailing_whitespace_in_comment' => true,
    'single_line_comment_style' => [
        'comment_types' => ['asterisk', 'hash'],
    ],

    // Control Structure
    'control_structure_continuation_position' => [
        'position' => 'same_line',
    ],
    'elseif' => true,
    'empty_loop_body' => [
        'style' => 'semicolon',
    ],
    'empty_loop_condition' => [
        'style' => 'while',
    ],
    'include' => true,
    'no_break_comment' => [
        'comment_text' => 'no break',
    ],
    'no_superfluous_elseif' => true,
    'no_trailing_comma_in_list_call' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unneeded_curly_braces' => true,
    'no_useless_else' => true,
    'simplified_if_return' => true,
    'switch_case_semicolon_to_colon' => true,
    'switch_case_space' => true,
    'trailing_comma_in_multiline' => [
        'elements' => ['arrays'],
    ],

    // Function Notation
    'function_declaration' => true,
    'function_typehint_space' => true,
    'lambda_not_used_import' => true,
    'method_argument_space' => true,
    'no_spaces_after_function_name' => true,
    'return_type_declaration' => [
        'space_before' => 'none',
    ],
    'single_line_throw' => true,

    // Import
    'fully_qualified_strict_types' => true,
    'global_namespace_import' => [
        'import_constants' => null,
        'import_functions' => null,
        'import_classes' => true,
    ],
    'no_leading_import_slash' => true,
    'no_unused_imports' => true,
    'ordered_imports' => [
        'sort_algorithm' => 'length',
        'imports_order' => ['const', 'class', 'function'],
    ],
    'single_import_per_statement' => true,
    'single_line_after_imports' => true,

    // Language Construct
    'combine_consecutive_issets' => true,
    'combine_consecutive_unsets' => true,
    'declare_equal_normalize' => [
        'space' => 'none',
    ],
    'declare_parentheses' => true,
    'explicit_indirect_variable' => true,

    // Namespace Notation
    'blank_line_after_namespace' => true,
    'clean_namespace' => true,
    'no_leading_namespace_whitespace' => true,
    'single_blank_line_before_namespace' => true,

    // Operator
    'assign_null_coalescing_to_coalesce_equal' => true,
    'binary_operator_spaces' => [
        'default' => 'single_space',
    ],
    'concat_space' => [
        'spacing' => 'none',
    ],
    'new_with_braces' => true,
    'no_space_around_double_colon' => true,
    'not_operator_with_successor_space' => true,
    'object_operator_without_whitespace' => true,
    'standardize_increment' => true,
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    'ternary_to_null_coalescing' => true,
    'unary_operator_spaces' => true,

    // PHP Tag
    'blank_line_after_opening_tag' => true,
    'echo_tag_syntax' => [
        'format' => 'long',
        'long_function' => 'echo',
        'shorten_simple_statements_only' => true,
    ],
    'full_opening_tag' => true,
    'linebreak_after_opening_tag' => true,
    'no_closing_tag' => true,

    // PHPDoc
    'align_multiline_comment' => [
        'comment_type' => 'phpdocs_only',
    ],
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_phpdoc' => true,
    'phpdoc_add_missing_param_annotation' => [
        'only_untyped' => false,
    ],
    'phpdoc_align' => [
        'align' => 'left',
    ],
    'phpdoc_indent' => true,
    'phpdoc_line_span' => [
        'const' => 'multi',
        'property' => 'multi',
        'method' => 'multi',
    ],
    'phpdoc_scalar' => true,
    'phpdoc_separation' => true,
    'phpdoc_single_line_var_spacing' => true,
    'phpdoc_summary' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_trim' => true,
    'phpdoc_types' => true,
    'phpdoc_var_annotation_correct_order' => true,
    'phpdoc_var_without_name' => true,

    // Return Notation
    'no_useless_return' => true,
    'return_assignment' => true,
    'simplified_null_return' => true,

    // Semicolon
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line',
    ],
    'no_empty_statement' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'semicolon_after_instruction' => true,
    'space_after_semicolon' => true,

    // String Notation
    'explicit_string_variable' => true,
    'heredoc_to_nowdoc' => true,
    'no_binary_string' => true,
    'simple_to_complex_string_variable' => true,
    'single_quote' => true,

    // Whitespace
    'array_indentation' => true,
    'blank_line_before_statement' => [
        'statements' => ['return', 'exit', 'throw', 'try'],
    ],
    'compact_nullable_typehint' => true,
    'heredoc_indentation' => [
        'indentation' => 'start_plus_one',
    ],
    'indentation_type' => true,
    'line_ending' => true,
    'method_chaining_indentation' => true,
    'no_spaces_around_offset' => true,
    'no_spaces_inside_parenthesis' => true,
    'no_trailing_whitespace' => true,
    'no_whitespace_in_blank_line' => true,
    'single_blank_line_at_eof' => true,
    'types_spaces' => [
        'space' => 'none',
    ],
];

$finder = Finder::create()
    ->in([
        __DIR__.'/app',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    ->name('*.php')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

$config = new Config();

return $config->setRules($rules)
    ->setFinder($finder)
    ->setUsingCache(false)
    ->setIndent("    ")
    ->setLineEnding("\n");
