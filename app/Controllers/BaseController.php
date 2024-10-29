<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController fornece um lugar conveniente para carregar componentes
 * e realizar funções que são necessárias para todos os seus controladores.
 * Estenda esta classe em qualquer novo controlador:
 *     class Home extends BaseController
 *
 * Para segurança, certifique-se de declarar qualquer novo método como protegido ou privado.
 */
abstract class BaseController extends Controller
{
    /**
     * Instância do objeto Request principal.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * Um array de helpers a serem carregados automaticamente ao
     * instanciar a classe. Esses helpers estarão disponíveis
     * para todos os outros controladores que estendem BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Não edite esta linha
        parent::initController($request, $response, $logger);

        // Pré-carregue qualquer modelo, bibliotecas, etc., aqui.

        // Por exemplo: $this->session = \Config\Services::session();
    }
}
