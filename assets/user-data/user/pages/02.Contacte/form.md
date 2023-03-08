---
title: Contacte
form:
    name: contact-form
    fields:
        -
            name: firstname
            placeholder: 'First Name'
            label: false
            type: text
            wrapper_classes: 'col-xs-12 col-sm-6'
            classes: form-control
            customicon: fa-user
            validate:
                required: true
        -
            name: lastname
            placeholder: 'Last Name'
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
            name: message
            placeholder: 'Message for me'
            label: false
            type: textarea
            wrapper_classes: col-xs-12
            classes: form-control
            customicon: fa-comment
            rows: 4
            validate:
                required: true
                message: 'Tell me something...'
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
            body: '{% include ''forms/data.txt.twig'' %}'
        -
            redirect: 'home#contact/?form=contact&status=success'
---

Pots posar-te en contacte amb mi
