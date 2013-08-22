<?php

return array(
    'doctrine' => array(
        'authentication' => array(
            'orm_default' => array(
                'identity_class' => 'ZfcUserAuthorize\Entity\User'
            )
        ),

        'driver' => array(
            'zfc_user_doctrine' => null,

            'zfc_user_authorize' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\XmlDriver',
                'paths' => array(__DIR__ . '/orm')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'ZfcUserAuthorize\Entity' => 'zfc_user_authorize',
                    'ZfcUserDoctrine\Entity'  => null,
                )
            )
        )
    ),

    'service_manager' => include 'service.config.php',

    'spiffy_authorize' => array(
        'permission_providers' => array(
            array(
                'name' => 'SpiffyAuthorize\Provider\Permission\ObjectManager\RbacProvider',
                'options' => array(
                    'object_manager' => 'Doctrine\ORM\EntityManager',
                    'target_class' => 'ZfcUserAuthorize\Entity\UserResource',
                )
            )
        ),

        'role_providers' => array(
            array(
                'name' => 'SpiffyAuthorize\Provider\Role\ObjectManager\RbacProvider',
                'options' => array(
                    'object_manager' => 'Doctrine\ORM\EntityManager',
                    'target_class'   => 'ZfcUserAuthorize\Entity\UserRole'
                )
            )
        )
    ),

    'zfc_user' => array(
        'extensions' => array(
            'authorize'          => 'ZfcUserAuthorize\Extension',
            'authorize_doctrine' => 'ZfcUserAuthorize\DoctrineExtension',

            'user' => array(
                'options' => array(
                    'entity_class' => 'ZfcUserAuthorize\Entity\User'
                )
            )
        )
    ),
);