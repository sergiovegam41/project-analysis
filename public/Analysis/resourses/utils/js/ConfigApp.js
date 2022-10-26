export const HOST_NAME = `${window.location.protocol}//${window.location.host}/Analysis`;
export const HOST = `${window.location.protocol}//${window.location.host}`;

export const MENU_LIST = [
   {
       "name" : "Home",
       "icon" : "home-outline",
       "url" : HOST_NAME + '/'
   },
   {
       "name" : "Estadios",
       "icon" : "ticket-outline",
       "url" : HOST_NAME + '/resourses/modules/Estadios'
   },
   {
       "name" : "Partidos",
       "icon" : "football-outline",
       "url" : HOST_NAME + '/resourses/modules/partidos'
   },
   {
       "name" : "Jugadores",
       "icon" : "accessibility-outline",
       "url" : HOST_NAME + '/resourses/modules/jugadores'
   },
   {
       "name" : "Tiempo",
       "icon" : "calendar-number-outline",
       "url" : HOST_NAME + '/resourses/modules/tiempo'
   },
   {
       "name" : "Mapa",
       "icon" : "map-outline",
       "url" : HOST_NAME + '/resourses/modules/locate'
   },
   {
       "name" : "Filtros",
       "icon" : "options-outline",
       "url" : HOST_NAME + '/resourses/modules/filtros'
   },
//    {
//        "name" : "Acerca de",
//        "icon" : "information-circle-outline",
//        "url"  : HOST_NAME + '/ProyectoElectiva/resourses/modules/acerca'
//     },

];
