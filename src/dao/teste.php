<?php
require_once '../../bootstrap.php';

$usuario = new Usuario();

$usuario->setLogin("novo");

$entityManager->persist($c);

$entityManager->flush();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

