<?php
abstract class Shape1 {
    private float $height;
    private float $width;
    
    public function __construct(float $height, float $width) {
        $this->height = $height;
        $this->width = $width;
    }
    abstract public function calculateArea() : float;
}
?>