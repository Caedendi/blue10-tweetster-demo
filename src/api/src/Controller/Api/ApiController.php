<?php

namespace App\Controller\Api;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// FOS User Bundle
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
//use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
// END

class ApiController extends AbstractFOSRestController
{
    private $rep = "repo"; // TODO: make repository

    /**
     * @Rest\Get("/people")
     * @param Request $request
     * @return View
     */
    public function getList(Request $request): View
    {
        $data = [
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
            [
                "id" => 1234,
                "name" => "Jan",
                "username" => "Janssen",
                "email" => "example@hoi.nl",
            ], [
                "id" => 1235,
                "name" => "Klaas",
                "username" => "Klaassen",
                "email" => "example@hoi.nl",
            ],
        ];
        array_push($data, ["id" => 1236, "name" => "Lilo", "username" => "Lola", "email" => "example@hoi.nl"]);
        return (View::create($data, Response::HTTP_OK));
    }

    /**
     * @Rest\Get("/recents")
     * @param Request $request
     * @return View
     */
    public function getRecents(Request $request): View
    {
        $data = [
            [
                "id" => 0001,
                "title" => "Applicatiebeheerder",
                "level" => "Junior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Als applicatiebeheerder ben je verantwoordelijk voor het uitrollen en beheren van onze maatwerk-applicaties.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0002,
                "title" => "Netwerkbeheerder",
                "level" => "Medior",
                "company" => "Microsoft",
                "location" => "Sittard",
                "postDate" => "01 januari 2020",
                "summary" => "Als netwerkbeheerder ben je verantwoordelijk voor het beheren van ons netwerksysteem.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0003,
                "title" => "Software Developer",
                "level" => "Senior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Omschrijving 3.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0004,
                "title" => "Applicatiebeheerder",
                "level" => "Senior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Omschrijving numero quadro.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0005,
                "title" => "Applicatiebeheerder",
                "level" => "Senior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Summary number five.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ]
        ];

        return (View::create($data, Response::HTTP_OK));
    }


    /**
     * @Rest\Get("/profile")
     * @param Request $request
     * @return View
     */
    public function getProfile(Request $request): View
    {
        $data = [
            [
                "id" => 0001,
                "title" => "Applicatiebeheerder",
                "level" => "Junior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Als applicatiebeheerder ben je verantwoordelijk voor het uitrollen en beheren van onze maatwerk-applicaties.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0002,
                "title" => "Netwerkbeheerder",
                "level" => "Medior",
                "company" => "Microsoft",
                "location" => "Sittard",
                "postDate" => "01 januari 2020",
                "summary" => "Als netwerkbeheerder ben je verantwoordelijk voor het beheren van ons netwerksysteem.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0003,
                "title" => "Software Developer",
                "level" => "Senior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Omschrijving 3.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0004,
                "title" => "Applicatiebeheerder",
                "level" => "Senior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Omschrijving numero quadro.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ], [
                "id" => 0005,
                "title" => "Applicatiebeheerder",
                "level" => "Senior",
                "company" => "DSM",
                "location" => "Sittard",
                "postDate" => "22 october 2018",
                "summary" => "Summary number five.",
                "description" => "asdfl;kjael;kjasd;lakjesr;lkjasdg;lkar;lkasdg;lasdg;ljarweg;ljk"
            ]
        ];

        return (View::create($data, Response::HTTP_OK));
    }

//
//    /**
//     * @Rest\Get("/profile")
//     * @param Request $request
//     * @return View
//     */
//    public function getProfile(Request $request): View
//    {
//        $data = [
//            "id" => 0001,
//            "username" => "BarackObama",
//            "displayname" => "Barack Obama",
//            "description" => "Dad, husband, President, citizen.",
//            "location" => "Washington, DC",
//            "website" => "obama.org",
//            "birthdate" => "August 4, 1961",
//            "joindate" => "March 2007"
//        ];
//
//        return (View::create($data, Response::HTTP_OK));
//    }

}
