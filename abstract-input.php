<?php

abstract class Input {

    protected $view;

    protected $slug;

    protected $label;

    protected $feedback;

    protected $input;

    public function __construct( $view, $slug, $label, $feedback ) {

        $this->view     = $view;
        $this->slug     = $slug;
        $this->label    = $label;
        $this->feedback = $feedback;
        $this->input    = isset( $_POST[ $this->slug ] ) ? $_POST[ $this->slug ] : '';

    }

    public function get_template( $path, $atts ) {

        ob_start();

        require $path . '.php';

        $html = ob_get_contents();

        ob_end_clean();

        return $html;

    }

}
