<?php

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( '_Customize_Category_Dropdown_Control' )):

    /**
     * Custom Control for category dropdown
     * @package pperception
     * @subpackage pperception
     * @since 1.0.0
     *
     */
    class pperception_Customize_Category_Dropdown_Control extends WP_Customize_Control {

        /**
         * Declare the control type.
         *
         * @access public
         * @var string
         */
        public $type = 'category_dropdown';

        /**
         * Function to  render the content on the theme customizer page
         *
         * @access public
         * @since 1.0.0
         *
         * @param null
         * @return void
         *
         */
        public function render_content()
        {
            $pperception_customizer_name = 'pperception_customizer_dropdown_categories_' . $this->id;;
            $pperception_dropdown_categories = wp_dropdown_categories(
                array(
                    'name'              => $pperception_customizer_name,
                    'echo'              => 0,
                    'show_option_none'  =>__('Select Category','pperception'),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );
            $pperception_dropdown_final = str_replace( '<select', '<select ' . $this->get_link(), $pperception_dropdown_categories );
            printf(
                '<label><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $pperception_dropdown_final
            );
        }
    }
endif;
