<?php

if (! function_exists('faker')) {
    /**
     * @return \Faker\Generator
     */
    function faker()
    {
        return app()->make(\Faker\Generator::class);
    }
}
