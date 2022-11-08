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
       "name" : "Ligas",
       "icon" : "trophy-outline",
       "url" : HOST_NAME + '/resourses/modules/Ligas'
   },
   {
       "name" : "Managers",
       "icon" : "accessibility-outline",
       "url" : HOST_NAME + '/resourses/modules/jugadores'
   },
   {
       "name" : "Paises",
       "icon" : "map-outline",
       "url" : HOST_NAME + '/resourses/modules/locate'
   },
   {
       "name" : "Integrantes",
       "icon" : "people-outline",
       "url" : HOST_NAME + '/resourses/modules/integrantes'
    },
    {
        "name" : "Documentación",
        "icon" : "clipboard-outline",
        "url" : HOST_NAME + '/resourses/modules/doc'
    },


];
