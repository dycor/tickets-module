<?php

return [
    'tickets' => [
        'type' => 'Segment',
        'options' => [
            'route' => '/',
            'defaults' => [
                'controller' => \ConferenceTools\Tickets\Controller\TicketController::class,
                'action' => 'index',
            ],
        ],
        'may_terminate' => true,
        'child_routes' => [
            'select-tickets' => [
                'type' => 'Segment',
                'options' => [
                    'route' => 'select-tickets[/:discount-code]',
                    'defaults' => [
                        'controller' => \ConferenceTools\Tickets\Controller\TicketController::class,
                        'action' => 'select-tickets',
                    ],
                ],
            ],
            'purchase' => [
                'type' => 'Segment',
                'options' => [
                    'route' => 'purchase/:purchaseId',
                    'defaults' => [
                        'controller' => \ConferenceTools\Tickets\Controller\TicketController::class,
                        'action' => 'purchase',
                    ],
                ],
            ],
            'complete' => [
                'type' => 'Segment',
                'options' => [
                    'route' => 'complete/:purchaseId',
                    'defaults' => [
                        'controller' => \ConferenceTools\Tickets\Controller\TicketController::class,
                        'action' => 'complete',
                    ],
                ],
            ],
            'manage' => [
                'type' => 'Segment',
                'options' => [
                    'route' => 'manage/:purchaseId/:ticketId',
                    'defaults' => [
                        'controller' => \ConferenceTools\Tickets\Controller\TicketController::class,
                        'action' => 'manage',
                    ],
                ],
            ],
        ],
    ],
];
