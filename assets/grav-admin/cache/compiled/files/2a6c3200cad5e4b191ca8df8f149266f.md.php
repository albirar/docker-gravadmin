<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/02.Contacte/form.md',
    'modified' => 1678219187,
    'size' => 1734,
    'data' => [
        'header' => [
            'title' => 'Contacte',
            'form' => [
                'name' => 'contact-form',
                'fields' => [
                    0 => [
                        'name' => 'firstname',
                        'placeholder' => 'First Name',
                        'label' => false,
                        'type' => 'text',
                        'wrapper_classes' => 'col-xs-12 col-sm-6',
                        'classes' => 'form-control',
                        'customicon' => 'fa-user',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'lastname',
                        'placeholder' => 'Last Name',
                        'label' => false,
                        'type' => 'text',
                        'wrapper_classes' => 'col-xs-12 col-sm-6',
                        'classes' => 'form-control',
                        'customicon' => 'fa-address-card',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'email',
                        'placeholder' => 'Email',
                        'label' => false,
                        'type' => 'email',
                        'wrapper_classes' => 'col-xs-12',
                        'classes' => 'form-control',
                        'customicon' => 'fa-envelope',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    3 => [
                        'name' => 'message',
                        'placeholder' => 'Message for me',
                        'label' => false,
                        'type' => 'textarea',
                        'wrapper_classes' => 'col-xs-12',
                        'classes' => 'form-control',
                        'customicon' => 'fa-comment',
                        'rows' => 4,
                        'validate' => [
                            'required' => true,
                            'message' => 'Tell me something...'
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Submit'
                    ],
                    1 => [
                        'type' => 'reset',
                        'value' => 'Reset'
                    ]
                ],
                'process' => [
                    0 => [
                        'save' => NULL,
                        'fileprefix' => 'contact-',
                        'dateformat' => 'Ymd-His-u',
                        'extension' => 'yaml',
                        'body' => '{% include \'forms/data.txt.twig\' %}'
                    ],
                    1 => [
                        'redirect' => 'home#contact/?form=contact&status=success'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Contacte
form:
    name: contact-form
    fields:
        -
            name: firstname
            placeholder: \'First Name\'
            label: false
            type: text
            wrapper_classes: \'col-xs-12 col-sm-6\'
            classes: form-control
            customicon: fa-user
            validate:
                required: true
        -
            name: lastname
            placeholder: \'Last Name\'
            label: false
            type: text
            wrapper_classes: \'col-xs-12 col-sm-6\'
            classes: form-control
            customicon: fa-address-card
            validate:
                required: true
        -
            name: email
            placeholder: Email
            label: false
            type: email
            wrapper_classes: col-xs-12
            classes: form-control
            customicon: fa-envelope
            validate:
                required: true
        -
            name: message
            placeholder: \'Message for me\'
            label: false
            type: textarea
            wrapper_classes: col-xs-12
            classes: form-control
            customicon: fa-comment
            rows: 4
            validate:
                required: true
                message: \'Tell me something...\'
    buttons:
        -
            type: submit
            value: Submit
        -
            type: reset
            value: Reset
    process:
        -
            save: null
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: yaml
            body: \'{% include \'\'forms/data.txt.twig\'\' %}\'
        -
            redirect: \'home#contact/?form=contact&status=success\'',
        'markdown' => 'Pots posar-te en contacte amb mi
'
    ]
];
