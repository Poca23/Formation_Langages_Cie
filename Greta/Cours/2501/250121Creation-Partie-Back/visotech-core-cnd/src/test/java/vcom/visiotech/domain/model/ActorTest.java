// ActorTest.java
package vcom.visiotech.domain.model;

public class ActorTest {

    public static void main(String[] args) {
        Actor actor = new Actor("Leonardo DiCaprio", 1974, "American");

        System.out.println("Actor Name: " + actor.getName());
        System.out.println("Birth Year: " + actor.getBirthYear());
        System.out.println("Nationality: " + actor.getNationality());
        System.out.println("Details: " + actor.getDetails());
    }
}
