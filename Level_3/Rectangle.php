<?php
require_once 'Shape2.php';
class Rectangle implements Shape2 {
    private float $height;
    private float $width;

    public function __construct(float $height, float $width) {
        $this->height = $height;
        $this->width = $width;
    }
    public function calculateArea() : float {
        $area = $this->height * $this->width;
        return $area;
    }
}
?>