---
title: Contacte
slug: contacte
routable: false
form:
    name: contacte
    fields:
        -
            name: nom
            placeholder: Nom
            label: false
            type: text
            wrapper_classes: 'col-xs-12 col-sm-6'
            classes: form-control
            customicon: fa-user
            validate:
                required: true
        -
            name: cognoms
            placeholder: Cognoms
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
            placeholder: Missatge
            label: false
            type: textarea
            wrapper_classes: col-xs-12
            classes: form-control
            customicon: fa-comment
            rows: 4
            validate:
                required: true
                message: 'Escriviu el vostre missatge...'
        -
            name: g-recaptcha-response
            placeholder: 'Verifica que ets humà'
            label: 'Verifica que ets un humà'
            type: captcha
            recaptcha_site_key: 6Le_sH4UAAAAAPiqfVIBhi70sBoe-zhPKqmb1I6n
            recaptcha_not_validated: 'Captcha invalid!'
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Enviar
        -
            type: reset
            value: Netejar
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
resume:
    general:
        bgcolor: '#2fc0d1'
        secondarycolor: '#9bd952'
        github: '0'
    contact:
        form:
            slug: contacte
    sidebar:
        profile_img: {  }
        profile_img_2: {  }
    home:
        bg_img: {  }
---

Pots posar-te en contacte amb mi
