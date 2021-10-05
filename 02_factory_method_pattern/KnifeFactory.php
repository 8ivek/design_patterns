<?php

class KnifeFactory
{
    /**
     * @throws Exception
     */
    public static function create(string $knife_type): KnifeInterface
    {
        if (empty($knife_type)) {
            throw new Exception('Invalid knife type');
        } else {
            $className = ucfirst($knife_type) . 'Knife';
            if (class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('Knife type not found.');
            }
        }
    }
}