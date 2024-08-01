<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //Entrenamiento Base del conocimiento
    //Horarios de Atencion
    "atencion" => "La atencion de la Clinica Dental es de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "horarios de atencion" => "Claro que si, Los horarios de atencion  son de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "cuales son los horarios de atencion" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "cuales son los horarios de atencion?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "en que horario puedo venir" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "a que hora atiende" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "cuales son los horarios" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende en la mañana" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende en la noche" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende por la tarde" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende en la mañana?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende en la noche?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende por la tarde?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende feriados?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende domingos?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "atiende en navidad?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",

    "cuales son los horarios de atención" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "horario" => "Los horarios de atencion  son de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "horarios" => "Los horarios de atencion  son de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    
    //Direccion
    "direccion" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "dirección" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "como puedo llegar" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "como puedo llegar?" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "ubicacion?" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",

    "donde es" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "cual es la direccion" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,
    "cual es la dirección" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,
    "cual es la dirección?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,

    "cual es la direccion?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,
    "ubicacion" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "donde esta ubicada?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "donde se encuentra la clinica?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa ",
    "donde se encuentra la clinica dental?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa ",
    "donde se encuentra la clinica" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa ",
    //Tratamientos
      "tratamientos" => "Ofrecemos Limpieza dental, obturaciones, empastes, extracciones, tratamiento de conducto, ortodoncia, fluorizacion, protesis, blanqueamiento dental, evaluacion dental, rayos x",
      "que tratamientos realizan?"  => "Realizamos: Limpieza dental, obturaciones, empastes, extracciones, tratamiento de conducto, ortodoncia, fluorizacion, protesis, blanqueamiento dental, evaluacion dental, rayos x",
      "que tratamientos realizan"  => "Realizamos: Limpieza dental, obturaciones, empastes, extracciones, tratamiento de conducto, ortodoncia, fluorizacion, protesis, blanqueamiento dental, evaluacion dental, rayos x",
      "hacen tratamientos"  => "Claro, realizamos impieza dental, obturaciones, empastes, extracciones, tratamiento de conducto, ortodoncia, fluorizacion, protesis, blanqueamiento dental, evaluacion dental, rayos x",
      "hacen tratamientos?"  => "Claro, realizamos impieza dental, obturaciones, empastes, extracciones, tratamiento de conducto, ortodoncia, fluorizacion, protesis, blanqueamiento dental, evaluacion dental, rayos x",
      "que tipo de tratamientos realizan?" => "Ofrecemos Limpieza dental, obturaciones, empastes, extracciones, tratamiento de conducto, ortodoncia, fluorizacion, protesis, blanqueamiento dental, evaluacion dental, rayos x",  
      "que tipos de tratamientos realizan" => "Ofrecemos Limpieza dental, obturaciones, empastes, extracciones, tratamiento de conducto, ortodoncia, fluorizacion, protesis, blanqueamiento dental, evaluacion dental, rayos x",  

    //promociones
    "hay promociones" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "hay promociones?" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "promociones" => "actualmente contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "promocion" => "Contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "que promocion hay" => "Actualmente contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "plan de referidos" => " ¡Comparte tu sonrisa! Refiera a un amigo y ambos recibirán un 10% de descuento en su próximo tratamiento.¡No te lo pierdas! Agenda tu cita hoy mismo al [63262665] o visita nuestra página web [www.clinicadentalinnovacion.com].",
    "descuentos" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "hay descuentos" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",

    //recomendaciones
    "que hago despues de una extraccion" => "Muerda suavemente una gasa estéril colocada sobre el área de la extracción durante 30-60 minutos, evite enjuagues, dieta blanda, mantenga la higiene dental evitando la zona de extracion, tome medicamentos segun indicaciones, descanse y evite actividades fisicas intensas",
    "extraccion" => "Muerda suavemente una gasa estéril colocada sobre el área de la extracción durante 30-60 minutos, evite enjuagues, dieta blanda, mantenga la higiene dental evitando la zona de extracion, tome medicamentos segun indicaciones, descanse y evite actividades fisicas intensas",
    "extraccion de muela" => "Muerda suavemente una gasa estéril colocada sobre el área de la extracción durante 30-60 minutos, evite enjuagues, dieta blanda, mantenga la higiene dental evitando la zona de extracion, tome medicamentos segun indicaciones, descanse y evite actividades fisicas intensas",
    "extraccion de diente" => "Muerda suavemente una gasa estéril colocada sobre el área de la extracción durante 30-60 minutos, evite enjuagues, dieta blanda, mantenga la higiene dental evitando la zona de extracion, tome medicamentos segun indicaciones, descanse y evite actividades fisicas intensas",
    "me extrageron una muela" => "Muerda suavemente una gasa estéril colocada sobre el área de la extracción durante 30-60 minutos, evite enjuagues, dieta blanda, mantenga la higiene dental evitando la zona de extracion, tome medicamentos segun indicaciones, descanse y evite actividades fisicas intensas",
    "me extrageron un diente" => "Muerda suavemente una gasa estéril colocada sobre el área de la extracción durante 30-60 minutos, evite enjuagues, dieta blanda, mantenga la higiene dental evitando la zona de extracion, tome medicamentos segun indicaciones, descanse y evite actividades fisicas intensas",
    "que hago despues de una extraccion?" => "Muerda suavemente una gasa estéril colocada sobre el área de la extracción durante 30-60 minutos, evite enjuagues, dieta blanda, mantenga la higiene dental evitando la zona de extracion, tome medicamentos segun indicaciones, descanse y evite actividades fisicas intensas",
    "dolor por los aparatos de ortodoncia" => "Recuerda que un cierto grado de incomodidad es normal durante el tratamiento de ortodoncia, para disminuir las molestias puede consumir alimentos blandos, analgesicos, hidratarse y si el dolor es muy intenso consulte al ortodoncista",
    "dolor por ortodoncia" => "Recuerda que un cierto grado de incomodidad es normal durante el tratamiento de ortodoncia, para disminuir las molestias puede consumir alimentos blandos, analgesicos, hidratarse y si el dolor es muy intenso consulte al ortodoncista",
    "dolor por la ortodoncia" => "Recuerda que un cierto grado de incomodidad es normal durante el tratamiento de ortodoncia, para disminuir las molestias puede consumir alimentos blandos, analgesicos, hidratarse y si el dolor es muy intenso consulte al ortodoncista",
    "ortodoncia dolorosa" => "Recuerda que un cierto grado de incomodidad es normal durante el tratamiento de ortodoncia, para disminuir las molestias puede consumir alimentos blandos, analgesicos, hidratarse y si el dolor es muy intenso consulte al ortodoncista",

    "perder un diente" => "Enfermedad periodontal: La gingivitis y la periodontitis son infecciones que afectan las encías y los tejidos de soporte de los dientes. Si no se tratan, pueden llevar a la pérdida de dientes.",    
    "riesgo de perder un diente" => "Enfermedad periodontal: La gingivitis y la periodontitis son infecciones que afectan las encías y los tejidos de soporte de los dientes. Si no se tratan, pueden llevar a la pérdida de dientes.",
    "perder una muela" => "La falta de cepillado y uso de hilo dental puede conducir a problemas dentales que eventualmente pueden resultar en la pérdida de dientes.",
    "limpieza" => "Generalmente, se recomienda hacer una limpieza dental cada seis meses, aunque esto puede variar según la salud bucodental de cada persona. Algunas personas pueden necesitar limpiezas más frecuentes.",
    "limpieza dental" => "Generalmente, se recomienda hacer una limpieza dental cada seis meses, aunque esto puede variar según la salud bucodental de cada persona. Algunas personas pueden necesitar limpiezas más frecuentes.",

    //Preguntas frecuentes
    "puedo ir al dentista si estoy enfermo" =>"Si tienes una enfermedad contagiosa, como una gripe o resfriado fuerte, es mejor reprogramar tu cita para evitar contagiar a otras personas y a tu dentista.",
    "me duele la muela" =>"El dolor de muela puede ser causado por una variedad de problemas, como caries, infecciones, o problemas con las encías, por lo que es importante obtener una evaluación profesional para tratar el problema adecuadamente.",
    




    //CITAs
    "cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 ",
    "agendar cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 ",
    "quiero hacer una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 ",
    "agendar una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 ",
    "como puedo hacer una cita?" =>"puedes agendar una cita al siguiente numero de telefono 63262665 ",  
    "como puedo hacer una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 ",  
    "quiero una limpieza dental" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "quiero una extraccion " =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "quiero una evaluacion dental" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "quiero hacer una consulta" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "como puedo agendar una cita" =>"Puedes agendar una cita al siguiente numero de telefono 63262665",
    "cuando me puede atender?" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "cuando podria ir" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    
    
    //name

    "como te llamas?" =>"Mi nombre Rubi IA un asistente virtual para brindarte informacion acerca de la Clinica Dental",
    "cual es tu nombre?" =>"Soy Rubi IA un asistente virtual para brindarte informacion acerca de la Clinica Dental Innovacion",
    "tienes nombre?" =>"Soy Rubi IA un asistente virtual para brindarte informacion acerca de la Clinica Dental",
    "quien es rubi?" =>"Rubi IA un asistente virtual para brindarte informacion acerca de la Clinica Dental",
    "tienes nombre" =>"Soy Rubi IA un asistente virtual para brindarte informacion acerca de la Clinica Dental",
    "quien es rubi" =>"Rubi es una IA asistente virtual para brindarte informacion acerca de la Clinica Dental",
    "que es rubi?" =>"Rubi es una IA asistente virtual para brindarte informacion acerca de la Clinica Dental",

    "porque te llamas rubi?" =>"Mi creador me puso me el nombre de Rubi en memoria a una de las mascotas mas importantes para mi creador puesto que el la considera la mascota y amiga perfecta",
    "por que  te llamas rubi?" =>"Mi creador me puso me el nombre de Rubi en memoria a una de las mascotas mas importantes para mi creador puesto que el la considera la mascota y amiga perfecta",
    "pq te llamas rubi?" =>"Mi creador me puso me el nombre de Rubi en memoria a una de las mascotas mas importantes para mi creador puesto que el la considera la mascota y amiga perfecta",
    "¿porque te llamas rubi?" =>"Mi creador me puso me el nombre de Rubi en memoria a una de las mascotas mas importantes para mi creador puesto que el la considera la mascota y amiga perfecta",



    //saludo
    "hola" =>"Hola que tal! en que te puedo ayudar",
    "hola buenos dias" =>"Hola que tal! en que te puedo ayudar",
    "hola buenas noches" =>"Hola buenas noches en que te puedo ayudar",
    "hola buenas tardes" =>"Hola buenas tardes en que te puedo ayudar",
    "un saludo" =>"como te va",
    "hello" =>"hey un gusto de verte",
    
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar con la atencion de la clinica dental, prueba preguntanando acerca la direccion horarios, tratamientos, promociones, recomendaciones o agendar una cita");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
