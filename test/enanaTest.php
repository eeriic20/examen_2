<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {

    public function testHeridaLeveVive() {
       
        #Se probará el efecto de una herida leve a una Enana con puntos de vida suficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es mayor que 0 y además que su situación es viva
        $enana = new Enana("Enana1", 20, "Viva");
        $this->assertEquals(10, $enana->heridaLeve());
        $enana2 = new Enana("Enana1", 20, "Viva");
        $this->assertEquals("Viva", $enana2->heridaLeve2());

    }

    public function testHeridaLeveMuere() {
       
        #Se probará el efecto de una herida leve a una Enana con puntos de vida insuficientes para sobrevivir al ataque
        #Se tendrá que probar que la vida es menor que 0 y además que su situación es muerta
        $enana = new Enana("Enana2", 5, "Viva");
        $this->assertEquals(-5, $enana->heridaLeve());
        $enana2 = new Enana("Enana2", 5, "Viva");
        $this->assertEquals("Muerta", $enana2->heridaLeve2());
    }

    public function testHeridaGrave() {
       
        #Se probará el efecto de una herida grave a una Enana con una situación de viva.
        #Se tendrá que probar que la vida es 0 y además que su situación es limbo
        $enana = new Enana("Enana3", 10, "Viva");
        $this->assertEquals(0, $enana->heridaGrave());
        $enana2 = new Enana("Enana3", 10, "Viva");
        $this->assertEquals("Limbo", $enana2->heridaGrave2());

    }
    
    public function testPocimaRevive() {
       
        #Se probará el efecto de administrar una pócima a una Enana muerta pero con una vida mayor que -10 y menor que 0
        #Se tendrá que probar que la vida es mayor que 0 y que su situación ha cambiado a viva
        $enana = new Enana("Enana4", -5, "Muerta");
        $this->assertEquals(5, $enana->pocima());
        $enana2 = new Enana("Enana4", -5, "Muerta");
        $this->assertEquals("Viva", $enana2->pocima2());

    }

    public function testPocimaExtraLimbo() {
       
        #Se probará el efecto de administrar una pócima Extra a una Enana en el limbo.
        #Se tendrá que probar que la vida es 50 y la situación ha cambiado a viva.
        $enana = new Enana("Enana5", 0, "Limbo");
        $this->assertEquals(50, $enana->pocimaExtra());
        $enana2 = new Enana("Enana5", 0, "Limbo");
        $this->assertEquals("Viva", $enana2->pocimaExtra2());
    }
}
