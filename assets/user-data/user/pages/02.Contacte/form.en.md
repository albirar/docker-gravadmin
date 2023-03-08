---
title: Contact
slug: contact
routable: false
form:
    name: contact
    fields:
        -
            name: nom
            placeholder: 'First Name'
            label: false
            type: text
            wrapper_classes: 'col-xs-12 col-sm-6'
            classes: form-control
            customicon: fa-user
            validate:
                required: true
        -
            name: cognoms
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
            name: missatge
            placeholder: Message
            label: false
            type: textarea
            wrapper_classes: col-xs-12
            classes: form-control
            customicon: fa-comment
            rows: 4
            validate:
                required: true
                message: 'Write your message...'
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
            fileprefix: contacte-
            dateformat: Ymd-His-u
            extension: yaml
            body: '{% include ''forms/data.txt.twig'' %}'
        -
            redirect: 'home#contact/?form=contact&status=success'
---

Do you want to contact with me?