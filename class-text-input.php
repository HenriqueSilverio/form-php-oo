<?php

class TextInput extends Input implements Field {

    public function render() {

        $atts['slug']     = $this->slug;
        $atts['label']    = $this->label;
        $atts['value']    = $this->sanitize( $this->input );
        $atts['state']    = $this->get_state();
        $atts['feedback'] = $this->feedback;

        echo $this->get_template( $this->view, $atts );

    }

    public function get_state() {

        $state = 'EMPTY';

        if ( isset( $_POST[ $this->slug ] ) ) {

            $state = $this->is_valid() ? 'VALID' : 'INVALID';

        }

        return $state;

    }

    public function is_valid() {

        $filtered = $this->sanitize( $this->input );

        $isValid = $this->validate( $filtered );

        return $isValid;

    }

    public function sanitize( $input ) {

        $filtered = trim( $input );
        $filtered = preg_replace('/[\r\n\t ]+/', ' ', $filtered);

        return $filtered;

    }

    public function validate( $input ) {

        return empty( $input ) ? false : true;

    }

}
