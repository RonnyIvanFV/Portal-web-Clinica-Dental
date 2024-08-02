<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //Entrenamiento Base del conocimiento
    //Horarios de Atencion
    "atencion" => "La atencion de la Clinica Dental es de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "a que hora puedo venir" => "La atencion de la Clinica Dental es de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM, puede realizar una cita por whatsapp al 63262665",
    "a que hora puedo pasar" => "La atencion de la Clinica Dental es de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM, puede realizar una cita por whatsapp al 63262665",
    "a que hora puedo venir?" => "La atencion de la Clinica Dental es de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM, puede realizar una cita por whatsapp al 63262665",
    "a que hora puedo pasar?" => "La atencion de la Clinica Dental es de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM, puede realizar una cita por whatsapp al 63262665",
    "que hora puedo venir" => "La atencion de la Clinica Dental es de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM, puede realizar una cita por whatsapp al 63262665",
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
    "en que horarios atiende?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "en que horarios atiende" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "en que horario puedo pasar?" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM si deseas puedes agendar una cita mediante telefono o whatsapp 63262665",
    "en que horario puedo pasar" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM si deseas puedes agendar una cita mediante telefono o whatsapp 63262665",
    "que hora puedo pasar" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM si deseas puedes agendar una cita mediante telefono o whatsapp 63262665",
    
    "cuales son los horarios de atención" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "cuales son lo horarios de atención" => "La clinica Dental Innovacion trabaja bajo los siguientes horarios de atencion de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "horario" => "Los horarios de atencion  son de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    "horarios" => "Los horarios de atencion  son de lunes a viernes por las mañanas de 9:00 AM a 12 00 PM y por las tardes de 4:30 PM a 9:00 PM y los sabados de 9:00 AM a 7:00 PM",
    
    //Direccion
    "direccion" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "dirección" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "como puedo llegar" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa, tambien puedes encontrar la ubicaion en el mapa en la opcion de contactos del nuestro sitio web",
    "como puedo llegar?" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "ubicacion?" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",

    "donde es" =>"La Clinica Dental Innovacion esta ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa.",
    "cual es la direccion" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,
    "cual es la dirección" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,
    "cual es la dirección?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,

    "cual es la direccion?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa." ,
    "ubicacion" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "donde esta ubicada?" =>"La Clinica Dental se encuentra ubicada en la Avenida Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "donde queda ubicado" =>"La Clinica Dental se encuentra ubicada en la Av Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "donde es?" =>"La Clinica Dental se encuentra ubicada en la Av Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "donde queda" =>"La Clinica Dental se encuentra ubicada en la Av Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "donde queda ubicada" =>"La Clinica Dental se encuentra ubicada en la Av Buenos Aires #1102A al lado del Mercaco Hinojosa",
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
    "hay alguna promocion" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "hay alguna promocion?" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "hay alguna promo" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "alguna promo" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "alguna promo?" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "hay alguna promo?" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
    "promo" => "Claro que Si, contamos con las siguientes promociones Evaluación Dental Gratuita  Durante todo el mes de [Agosto], te ofrecemos una evaluación dental sin costo. Ven y conoce la salud de tu boca y descubre los tratamientos disponibles para mejorarla, si deseas conocer otras promociones pregunta acerca del Plan de referidos",
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
    "puedo pagar por qr?" =>"Claro que si, puedes pagar por qr, transferencia o en efectivo",
    "puedo pagar por qr" =>"Claro que si, puedes pagar por qr, transferencia o en efectivo",
    "puedo pagar por transferencia?" =>"Claro que si, puedes pagar por qr, transferencia o en efectivo",
    "puedo pagar por transferencia" =>"Claro que si, puedes pagar por qr, transferencia o en efectivo",
    "como puedo pagar" =>"Puedes pagar por qr, transferencia o en efectivo",
    "como puedo pagar?" =>"Puedes pagar por qr, transferencia o en efectivo",
    "puedo pagar con tarjeta?" =>"Puedes pagar por qr, transferencia o en efectivo",
    "atienden a niños?" =>"La atencion especial para niños es un odontopediatra, especializado en el cuidado dental infantil y en el manejo de las necesidades y comportamientos específicos de los más jóvenes.",
    "atienden a niños" =>"La atencion especial para niños es un odontopediatra, especializado en el cuidado dental infantil y en el manejo de las necesidades y comportamientos específicos de los más jóvenes.",
    "atienden a adultos mayores?" =>"La atencion especial para adultos mayores especializado en geriatría dental, preparado para abordar las necesidades y problemas dentales específicos que enfrentan los pacientes de edad avanzada.",
    "atienden a adultos mayores" =>"La atencion especial para adultos mayores especializado en geriatría dental, preparado para abordar las necesidades y problemas dentales específicos que enfrentan los pacientes de edad avanzada.",

    

    "me duele la muela" =>"El dolor de muela puede ser causado por una variedad de problemas, como caries, infecciones, o problemas con las encías, por lo que es importante obtener una evaluación profesional para tratar el problema adecuadamente.",
    "tengo dolor de muela" =>"El dolor de muela puede ser causado por una variedad de problemas, como caries, infecciones, o problemas con las encías, por lo que es importante obtener una evaluación profesional para tratar el problema adecuadamente.",
    "me duelen los dientes" =>"El dolor de dientes puede ser causado por una variedad de problemas, como caries, infecciones, o problemas con las encías, por lo que es importante obtener una evaluación profesional para tratar el problema adecuadamente.",
    "me duelen los dientes por la ortodoncia" =>"El dolor de dientes puede ser causado por una variedad de problemas, como caries, infecciones, o problemas con las encías, por lo que es importante obtener una evaluación profesional para tratar el problema adecuadamente.",

    
    "me duele el diente" =>"El dolor de dientes puede ser causado por una variedad de problemas, como caries, infecciones, o problemas con las encías, por lo que es importante obtener una evaluación profesional para tratar el problema adecuadamente.",
    "whatsapp" =>"63262665",
    "wasapp" =>"63262665",
    "celular" =>"63262665",
    "telefono" =>"63262665",
    "gracias" =>"que tengas un buen dia hasta luego...",
    "chau" =>"hasta pronto",
    "tiene facebook" =>"Claro que si puedes encontrarnos como Clinica Dental Innovacion en Facebook",
    "tiene tiktok" =>"Claro que si puedes encontrarnos como Clinica Dental Innovacion en tiktok",
    "me rompi un diente" =>"Es crucial que consultes a un dentista lo antes posible. Ellos podrán evaluar el daño y ofrecerte el tratamiento adecuado, que podría incluir una restauración del diente, una corona, o en casos más graves, una endodoncia.",
    "me rompi el diente" =>"Recoge los fragmentos: Si es posible, guarda los fragmentos del diente. Enjuágalos suavemente con agua, pero no uses jabones ni los frotes. Guarda el fragmento en un recipiente con leche o en un vaso con tu propia saliva para mantenerlo húmedo.Es crucial que consultes a un dentista lo antes posible. Ellos podrán evaluar el daño y ofrecerte el tratamiento adecuado, que podría incluir una restauración del diente, una corona, o en casos más graves, una endodoncia.",
    "que es la ortodoncia" =>"La ortodoncia es una especialidad de la odontología que se encarga de corregir los dientes y mandíbulas desalineados para mejorar la funcionalidad y la estética dental.",
    "ortodoncia" =>"La ortodoncia es una especialidad de la odontología que se encarga de corregir los dientes y mandíbulas desalineados para mejorar la funcionalidad y la estética dental.",
    "que la enfermedad periodontal" =>"Las enfermedades periodontales son infecciones que afectan los tejidos que rodean y sostienen los dientes, causando inflamación, sangrado y posible pérdida dental.",
    "periodontal" =>"Las enfermedades periodontales son infecciones que afectan los tejidos que rodean y sostienen los dientes, causando inflamación, sangrado y posible pérdida dental.",
    "tengo mal aliento" =>"Las enfermedades periodontales son infecciones que afectan los tejidos que rodean y sostienen los dientes, causando inflamación, sangrado y posible pérdida dental.",
    "carillas" =>"Las carillas son finas láminas de porcelana o resina compuesta que se adhieren a la superficie frontal de los dientes para mejorar su apariencia estética.",
    "fundas" =>"Las fundas son finas láminas de porcelana o resina compuesta que se adhieren a la superficie frontal de los dientes para mejorar su apariencia estética.",
    "que son las carillas?" =>"Las carillas son finas láminas de porcelana o resina compuesta que se adhieren a la superficie frontal de los dientes para mejorar su apariencia estética.",
    "que son las carillas" =>"Las carillas son finas láminas de porcelana o resina compuesta que se adhieren a la superficie frontal de los dientes para mejorar su apariencia estética.",
    "que son las fundas?" =>"Las fundas son finas láminas de porcelana o resina compuesta que se adhieren a la superficie frontal de los dientes para mejorar su apariencia estética.",
    "que son las fundas" =>"Las fundas son finas láminas de porcelana o resina compuesta que se adhieren a la superficie frontal de los dientes para mejorar su apariencia estética.",







    //CITAS
    "cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 o tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa ",
    "quisiera hacer una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una cita para el lunes" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una cita para el martes" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una cita para el miercoles" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una cita para el jueves" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una cita para el viernes" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una cita para el sabado" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una cita para el domingo" =>"Lo siento pero no abrimos los dias domingos pero puedes agendar una cita al siguiente numero de telefono 63262665",
    "quisiera hacer una cita para el feriado" =>"Lo siento pero no abrimos los dias feriados pero puedes agendar una cita al siguiente numero de telefono 63262665",
    "quisiera hacer una cita hoy" =>"Claro que si puedes agendar una cita al siguiente numero de telefono 63262665",
    "quisiera agendar una cita para hoy" =>"claro que si, puedes agendar una cita al siguiente numero de telefono 63262665",
    "quisiera hacer una cita para hoy" =>"claro que si, puedes agendar una cita al siguiente numero de telefono 63262665",
    "quisiera agendar una cita" =>"claro que si, puedes agendar una cita al siguiente numero de telefono 63262665",


    
    "quiero una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quisiera hacer una consulta" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "hola quiero una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "agendar cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quiero hacer una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "agendar una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "como puedo hacer una cita?" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",  
    "como puedo hacer una cita" =>"puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",  
    "quiero una limpieza dental" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quiero una extraccion " =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quiero una evaluacion dental" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665 tambien puedes acudir a la clinica dental esta es nuestra direccion Av. Buenos Aires #1102A al lado del Mercaco Hinojosa",
    "quiero hacer una consulta" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "como puedo agendar una cita" =>"Puedes agendar una cita al siguiente numero de telefono 63262665",
    "como puedo hacer cita" =>"Puedes agendar una cita al siguiente numero de telefono 63262665",
    "cuando me puede atender?" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "cuando podria ir" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    "cuando podria ir?" =>"Claro, puedes agendar una cita al siguiente numero de telefono 63262665",
    
    
    //name

    "como te llamas?" =>"Mi nombre es Rubi IA un asistente virtual para brindarte informacion acerca de la Clinica Dental",
    "como te llamas" =>"Mi nombre es Rubi IA un asistente virtual para brindarte informacion acerca de la Clinica Dental",
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
    "buenos dias" =>"Hola que como estas! en que te puedo ayudar",
    "buen dia" =>"Hola que como estas! en que te puedo ayudar",
    "hola buenos dias" =>"Hola que tal! en que te puedo ayudar",
    "hola buenas noches" =>"Hola buenas noches en que te puedo ayudar",
    "hola buenas tardes" =>"Hola buenas tardes en que te puedo ayudar",
    "un saludo" =>"como te va",
    "como estas" =>"¡Estoy bien, gracias! ¿Y tú? ¿En qué puedo ayudarte hoy?",
    "hello" =>"hey un gusto de verte",
    "hola rubi" =>"hola como estas? en que puedo ayudarte hoy?",
    
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
