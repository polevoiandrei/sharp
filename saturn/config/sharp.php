<?php

return [

    "name" => "Saturn",

    "entities" => [
        "spaceship" => [
            "list" => \App\Sharp\SpaceshipSharpList::class,
            "form" => \App\Sharp\SpaceshipSharpForm::class,
            "validator" => \App\Sharp\SpaceshipSharpValidator::class,
            "policy" => \App\Sharp\Policies\SpaceshipPolicy::class,
        ],
        "pilot" => [
            "list" => \App\Sharp\PilotSharpList::class,
            "form" => \App\Sharp\PilotSharpForm::class,
            "validator" => \App\Sharp\PilotSharpValidator::class,
        ],
        "user" => [
            "list" => \App\Sharp\UserSharpList::class,
            "policy" => \App\Sharp\Policies\UserPolicy::class,
            "authorizations" => [
                "delete" => false,
                "create" => false,
                "update" => false,
                "view" => false
            ]
        ]
    ],

    "menu" => [
        [
            "label" => "Company",
            "entities" => [
                "spaceship" => [
                    "label" => "Spaceships",
                    "icon" => "fa-space-shuttle"
                ],
                "pilot" => [
                    "label" => "Pilots",
                    "icon" => "fa-user"
                ]
            ]
        ], [
            "label" => "Travels",
            "entities" => [
                "passenger" => [
                    "label" => "Passengers",
                    "icon" => "fa-bed"
                ],
                "travel" => [
                    "label" => "Travel",
                    "icon" => "fa-suitcase"
                ]
            ]
        ], [
            "label" => "Admin",
            "entities" => [
                "user" => [
                    "label" => "Sharp users",
                    "icon" => "fa-user-secret"
                ]
            ]
        ],
//        [
//            "label" => "Test",
//            "entities" => [
//                "spaceship" => [
//                    "label" => "Spaceships",
//                    "icon" => "fa-plane"
//                ],
//                "user" => [
//                    "label" => "Users",
//                    "icon" => "fa-envelope"
//                ]
//            ]
//        ]
    ],

    "dashboard" => \App\Sharp\Dashboard::class,

    "uploads" => [
        "tmp_dir" => env("SHARP_UPLOADS_TMP_DIR", "tmp"),
        "thumbnails_dir" => env("SHARP_UPLOADS_THUMBS_DIR", "thumbnails"),
    ],

    "auth" => [
        "check" => \App\Sharp\Auth\SharpAuthCheck::class,
        "guard" => "sharp",
        "login_attribute" => "email",
        "password_attribute" => "password",
        "display_attribute" => "name",
    ]
];