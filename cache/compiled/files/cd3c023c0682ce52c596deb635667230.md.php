<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/arghya/Documents/Code/grav-skeleton-ceevee-site+admin-1.1.0/user/pages/01.home/modular.md',
    'modified' => 1687388483,
    'size' => 1528,
    'data' => [
        'header' => [
            'title' => 'Ceevee',
            'menu' => 'home',
            'form' => [
                'name' => 'my-nice-form',
                'action' => '/home',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'Name',
                        'placeholder' => 'Enter your name',
                        'autocomplete' => 'on',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ]
                    ],
                    1 => [
                        'name' => 'email',
                        'label' => 'Email',
                        'placeholder' => 'Enter your email address',
                        'type' => 'text',
                        'validate' => [
                            'rule' => 'email',
                            'required' => true
                        ]
                    ],
                    2 => [
                        'name' => 'message',
                        'label' => 'Message',
                        'size' => 'long',
                        'placeholder' => 'Enter your message',
                        'type' => 'textarea',
                        'validate' => [
                            'required' => true
                        ]
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Submit',
                        'class' => 'submit'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => '{{ config.plugins.email.to }}',
                                1 => '{{ form.value.email }}'
                            ],
                            'subject' => '[Feedback] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'feedback-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    2 => [
                        'message' => 'Thank you for your feedback!'
                    ],
                    3 => [
                        'display' => 'thankyou'
                    ]
                ]
            ],
            'onpage_menu' => true,
            'content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc',
                    'custom' => [
                        0 => '_about',
                        1 => '_resume',
                        2 => '_portfolio',
                        3 => '_call',
                        4 => '_testimonials',
                        5 => '_contact'
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Ceevee
menu: home

form:
    name: my-nice-form
    action: /home
    fields:
        - name: name
          label: Name
          placeholder: Enter your name
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Enter your email address
          type: text
          validate:
            rule: email
            required: true

        - name: message
          label: Message
          size: long
          placeholder: Enter your message
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Submit
          class: submit

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.to }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include \'forms/data.html.twig\' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include \'forms/data.txt.twig\' %}"
        - message: Thank you for your feedback!
        - display: thankyou

onpage_menu: true
content:
    items: @self.modular
    order:
        by: default
        dir: asc
        custom:
            - _about
            - _resume
            - _portfolio
            - _call
            - _testimonials
            - _contact',
        'markdown' => ''
    ]
];
