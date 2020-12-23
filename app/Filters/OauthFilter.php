<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use \App\Libraries\Oauth;
use OAuth2\Request;
use OAuth2\Response;

class OauthFilter implements FilterInterface
{

    /**
     * @inheritDoc
     */
    public function before(\CodeIgniter\HTTP\RequestInterface $request, $arguments = null)
    {
        $oauth = new Oauth();
        $request = Request::createFromGlobals();
        $response = new Response();

        if(!$oauth->server->verifyResourceRequest($request)){
            $oauth->server->getResponse()->send();
            die();
        }
        // TODO: Implement before() method.
    }

    /**
     * @inheritDoc
     */
    public function after(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, $arguments = null)
    {
        // TODO: Implement after() method.
    }
}