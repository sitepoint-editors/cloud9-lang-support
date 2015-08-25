package com.sitepoint;

import org.joda.time.LocalTime;

public class App {

    public static void main(String... args) {

        LocalTime time = new LocalTime();
        System.out.println("Current time: " + time);

        Greeter worldGreeter = new Greeter();
        worldGreeter.sayHello();
        
        Greeter spGreeter = new Greeter("SitePoint");
        spGreeter.sayHello();
        
    }
}