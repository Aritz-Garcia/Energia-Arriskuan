import { driver } from "driver.js";
import "driver.js/dist/driver.css";

// * Driver js
const driverObj = driver({
    popoverClass: 'driverjs-theme',
    showButtons: [
        'next',
        'previous',
        'close'
    ],
    nextBtnText: 'Hurrengoa &#129138;',
    prevBtnText: '&#129136; Aurrekoa',
    doneBtnText: 'Amaitu',
    progressText: '{{current}} / {{total}}',
    onNextClick:() => {
        if (driverObj.hasNextStep() == null) {
            location.reload();
        }
        driverObj.moveNext();
    },
    onCloseClick:() => {
        location.reload();
        driverObj.destroy();
    },
    onDestroyStarted: () => {
        location.reload();
        driverObj.destroy();
    },
    showProgress: true,
    animate: true,
    steps: [
        { element: '#hasieraDiv', popover: { title: 'Hasiera', description: 'Ikusi dezakegunez, hasierako gelan gaude.\nHemendik hasita ekintza desberdinak egin beharko dira energia-sistemak berrezartzeko.', side: "left", align: 'start' }},
        { element: '#ateGainean', popover: { title: 'Gelen izena', description: 'Gelen izena jakiteko ateen gainean klik eginez agertuko da.', side: "right", align: 'start' }},
        { element: '#atea', popover: { title: 'Gelak', description: 'Ateen gainean kliaktzean gelaz aldatuko da.', side: "right", align: 'start' }},
        { popover: { title: 'Zure txanda', description: 'Orain zure txanda da, zailatu denbora bukatu baino lehen ekintza desberdinak egiten. Zorte on!!!' } }
    ]
});


driverObj.drive();
