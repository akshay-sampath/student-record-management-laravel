<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routecontroller extends Controller
{
    function route($route = null){
           
           switch ($route) {
               case null:
                return view('layout.login');
                break;

               case 'master':
                return view('layout.master');
                break;
               
                case 'index':
                return view('index');
                break; 
               
               case 'newstudent':
                  return view('newstudent');
                  break;
                
               case 'register':
                  return view('register');
                  break;

                case 'students':
                   return view('students');
                   break;

               case 'contact':
                   return view('contact');
                   break;
               
               case 'announcement':
                return view('announcement');
                break;

                case 'notifications':
                  return view('notifications');
                  break;  

                case 'assignments':
                    return view('assignments');
                    break;

                case 'document':
                    return view('document');
                    break;

           }
    }
}
