<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /* A */
    /**
    * @Route("/Adviserss.html", name="Adviserss")
    */
    public function AdviserssAction()
    {
        return $this->render('default/Adviserss.html.twig');
    }
    /**
    * @Route("/Actions.html", name="Actions")
    */
    public function  ActionsAction()
    {
        return $this->render('default/Actions.html.twig');
    }

    /* B */

    /**
     * @Route("/bird.html", name="bird")
     */
    public function birdAction()
    {
        return $this->render('default/bird.html.twig');
    }
    
    /* C */
    
    /**
     * @Route("/people-who-know.html", name="people-who-know")
     */
    public function peoplewhoknowAction()
    {
        return $this->render('default/people-who-know.html.twig');
    }
    
    /**
     * @Route("/the-reason-that.html", name="the-reason-that")
     */
    public function thereasonthatAction()
    {
        return $this->render('default/the-reason-that.html.twig');
    }

    /* D */
    /**
    * @Route("/if-today-was.html", name="if-today-was")
    */
    public function  ifTodayWasAction()
    {
        return $this->render('default/if-today-was.html.twig');
    }

    /* E */
     /**
     * @Route("/whatever-you-do.html", name="whatever-you-do")
     */
    public function whateverYouDoAction()
    {
        return $this->render('default/whatever-you-do.html.twig');
    }
    /* F */
    /**
    * @Route("/lemon.html", name="lemon")
    */
    public function lemonAction()
    {
    return $this->render('default/lemon.html.twig');
    }
    /**
    * @Route("/lie.html", name="lie")
    */
    public function lieAction()
    {
    return $this->render('default/lie.html.twig');
    }

    /* G */
    
    /**
    * @Route("/the-eye-looks.html", name="the-eye-looks")
    */
    public function  theEyeLooksAction()
    {
        return $this->render('default/the-eye-looks.html.twig');
    }

    /* H */
    
      /**
     * @Route("/no-man.html", name="no-man")
     */
     public function  nomanAction()
     {
        return $this->render('default/no-man.html.twig');
     }
     
     /**
     * @Route("/a-night.html", name="a-night")
     */
     public function  anightAction()
     {
       return $this->render('default/a-night.html.twig');
     }

    /* I */

    	/**
	 * @Route("/in-one-ear.html", name="in-one-ear")
	 */
	public function inOneEarAction()
	{
	    return $this->render('default/in-one-ear.html.twig');
	}
    /* J */
    /**
     * @Route("/heisthe.html", name="heisthe")
     */
    public function heistheAction()
    {
        return $this->render('default/heisthe.html.twig');
    }
    /*
     * @Route("/tospeak.html", name="tospeak")
     */
    public function tospeakAction()
    {
       return $this->render('default/tospeak.html.twig');
    }
    /* K */
        /**
         * @Route("/kill.html", name="kill")
         */
        public function killAction()
        {
           return $this->render('default/kill.html.twig');
        }
        
         /**
         * @Route("/kingdom2.html", name="kingdom2")
         */
        public function kingdom2Action()
        {
           return $this->render('default/kingdom2.html.twig');
        }
    /* L */
    
    /**
    * @Route("/in-the-land.html", name="in-the-land")
    */
    public function  inTheLandAction()
    {
        return $this->render('default/in-the-land.html.twig');
    }
    
    /**
    * @Route("/laws-catch-flies.html", name="laws-catch-flies")
    */
    public function  lawsCatchFliesAction()
    {
        return $this->render('default/laws-catch-flies.html.twig');
    }

    /* M */
    /**
     * @Route("/easy.html", name="easy")
     */
    public function  easyAction()
    {
        return $this->render('default/easy.html.twig');
    }

    /**
     * @Route("/early.html", name="early")
     */
    public function eearlyAction()
    {
        return $this->render('default/early.html.twig');
    }


    /* N */
    /**
    * @Route("/best-defence.html", name="best-defence")
    */
    public function  bestDefenceAction()
    {
        return $this->render('default/best-defence.html.twig');
    }
    
    /**
    * @Route("/discretion.html", name="discretion")
    */
    public function  discretionAction()
    {
        return $this->render('default/discretion.html.twig');
    }

    /* O */
    /**

 * @Route("/zrob-komu-dobrze.html", name="zrob-komu-dobrze")
 */
public function  zrobKomuDobrzeAction()
{
    return $this->render('default/zrob-komu-dobrze.html.twig');
}
/**
 * @Route("/zlego-diabli.html", name="zlego-diabli")
 */
public function  zlegoDiabliAction()
{
    return $this->render('default/zlego-diabli.html.twig');

}
    /* P */


    /**
 * @Route("/pasuje.html", name="pasuje")
 */
public function pasujeAction()
{
    return $this->render('default/pasuje.html.twig');
}
/**
 * @Route("/patrzy.html", name="patrzy")
 */
public function patrzyAction()
{
    return $this->render('default/patrzy.html.twig');

}
    /* Q */
/**
 * @Route("/people.html", name="people")
 */
public function peopleAction()
{
    return $this->render('default/people.html.twig');
}
    /* R */
        /**
        * @Route("/focusontoday.html", name="focusontoday")
        */
        public function focusontodayAction()
        {
          return $this->render('default/focusontoday.html.twig');
        }
    /* S */
    /**
     * @Route("/snooze.html", name="snooze")
     */
    public function snoozeAction()
    {
        return $this->render('default/snooze.html.twig');
    }
    /**
    * @Route("/spade.html", name="spade")
    */
    public function  spadeAction()
    {
      return $this->render('default/spade.html.twig');
    }
    /* T */

    /* U */

    /* V */

    /* W */

    /* X */

    /* Y */

    /* Z */

}
