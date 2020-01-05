<?php
/**
 * Created by PhpStorm.
 * User: huangfs
 * Date: 2020/1/4
 * Time: 19:23
 */
/**
 * BaseController
 */
class BaseController

{

    protected $view;



    public function __construct()

    {

    }

    public function __destruct()

    {

        $view = $this->view;

        if ( $view instanceof View ) {

            extract($view->data);

            require $view->view;

        }

        $mail = $this->mail;

        if ( $mail instanceof Mail ) {

            $mailer = new Nette\Mail\SmtpMailer($mail->config);

            $mailer->send($mail);

        }

    }

}