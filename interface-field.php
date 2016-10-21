<?php

interface Field {

    public function render();

    public function is_valid();

    public function get_state();

    public function sanitize( $input );

    public function validate( $input );

}
