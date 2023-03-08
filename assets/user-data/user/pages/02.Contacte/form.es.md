---
title: Contacto
slug: contacto
routable: false
form:
    name: contacto
    fields:
        -
            name: nom
            placeholder: Nombre
            label: false
            type: text
            wrapper_classes: 'col-xs-12 col-sm-6'
            classes: form-control
            customicon: fa-user
            validate:
                required: true
        -
            name: cognoms
            placeholder: Apellidos
            label: false
            type: text
            wrapper_classes: 'col-xs-12 col-sm-6'
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
            name: missatge
            placeholder: Mensaje
            label: false
            type: textarea
            wrapper_classes: col-xs-12
            classes: form-control
            customicon: fa-comment
            rows: 4
            validate:
                required: true
                message: 'Escribe tu mensaje...'
        -
            name: g-recaptcha-response
            placeholder: 'Verifica que eres un humano'
            label: 'Verifica que eres un humano'
            type: captcha
            recaptcha_site_key: 6Le_sH4UAAAAAPiqfVIBhi70sBoe-zhPKqmb1I6n
            recaptcha_not_validated: 'Captcha invalido!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Enviar
        -
            type: reset
            value: Limpiar
    process:
        -
            email:
                subject: '[Site Contact Form] {{ form.value.nom|e }}'
                body: '{% include "forms/data.email.html.twig" %}'
        -
            save: null
            fileprefix: contacte-
            dateformat: Ymd-His-u
            extension: yaml
            body: '{% include ''forms/data.txt.twig'' %}'
        -
            redirect: 'home#contact/?form=contact&status=success'
---

Puedes ponerte en contacto conmigo...