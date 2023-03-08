---
title: RadioBolsa
subtitle: 'Sistema de difusió d''informació anomenat RadioBolsa'
projectdate: 1993-1995
projectdescription: "Realitzat a EnWare, SA, per a la Bolsa de Madrid, l'objectiu del qual era la distribució d'informació dels mercats d'aquesta entitat, via radio, als seus clients. El sistema estava dividit en dues parts: l'emissor i el receptor. \r\nQuant a l'emissor, el cor d'aquest era una llibreria feta en llenguatge C++, que proveïa de serveis a capes de més alt nivell, per a emetre els missatges indicats, via port serial, fins al col·lector de radio. El programa d'administració de la informació i de programació de les emissions estava fet amb CLIPPER. \r\nA la part receptora, el senyal es rebia via radio, amb un descodificador que injectava els missatges per port serial. \r\nUn programa resident o TSR, sota MS-DOS, s'encarregava de rebre els missatges i els emmagatzemava en memòria alta o en memòria expandida. \r\nAquest mateix programa, mitjançant una llibreria auxiliar, donava serveis de lectura de missatges per a un programa de presentació d'informació fet en llenguatge CLIPPER. \r\nLa meva tasca, dins el projecte, va ser l'anàlisi, el disseny, la implementació i manteniment d'ambdues llibreries i del programa resident de la part receptora. Un sistema molt semblant fou implementat per a la Comisión Nacional del Mercado de Valores (CNMV)"
projectags:
    -
        name: C++
    -
        name: Communications
    -
        name: eInvestment
    -
        name: Foxpro-CLIPPER
showtoolbar: false
slug: radio-bolsa
project_thumbnail:
    user/pages/04.portfolio/13.radiobolsa/cnmv.gif:
        name: cnmv.gif
        type: image/gif
        size: 1686
        path: user/pages/04.portfolio/13.radiobolsa/cnmv.gif
project_main_img:
    user/pages/04.portfolio/13.radiobolsa/cnmv.gif:
        name: cnmv.gif
        type: image/gif
        size: 1686
        path: user/pages/04.portfolio/13.radiobolsa/cnmv.gif
---

