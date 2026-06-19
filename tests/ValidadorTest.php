<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Validador;

class ValidadorTest extends TestCase
{
    private $validador;

    protected function setUp(): void
    {
        $this->validador = new Validador();
    }

    public function testValidarEdadNormal()
    {
        $resultado = $this->validador->validarEdad(25);
        $this->assertTrue($resultado);
    }

    public function testValidarEdadNegativa()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("La edad no puede ser un numero negativo");
        
        $this->validador->validarEdad(-5);
    }

    public function testValidarEdadMenor()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Es menor de edad");
        
        $this->validador->validarEdad(15);
    }

    public function testValidarEmailNormal()
    {
        $resultado = $this->validador->validarEmail("correo@ejemplo.com");
        $this->assertTrue($resultado);
    }

    public function testValidarEmailInvalido()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("El email ingresado no es válido");
        
        $this->validador->validarEmail("correo_invalido");
    }

    
    public function testValidarPasswordNormal()
    {
        $resultado = $this->validador->validarPassword("ClaveSegura1");
        $this->assertTrue($resultado);
    }

    public function testValidarPasswordCorta()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Contraseña demasiado corta");
        
        $this->validador->validarPassword("abc1");
    }

    public function testValidarPasswordSinNumero()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Debe contener al menos un número");
        
        $this->validador->validarPassword("SoloLetrasYMasLetras");
    }
   //V.	CONCLUSIONES
    //1.	¿Qué diferencia hay entre expectException y expectExceptionMessage?
    //  expectException() valida el tipo de excepción y expectExceptionMessage() valida el mensaje que muestra.

    //2.	¿Por qué es importante colocar expectException ANTES de ejecutar el código?
    // Porque PHPUnit debe saber que espera una excepción antes de que ocurra.

    //3.	¿Qué pasa si una función debe lanzar una excepción, pero no lo hace?
    // La prueba falla, ya que se esperaba un error y no ocurrió.

    //4.	¿En qué situaciones de un proyecto real usarías expectException?
     //Al validar datos incorrectos, accesos no permitidos o cualquier caso donde se deba generar un error controlado.

}
