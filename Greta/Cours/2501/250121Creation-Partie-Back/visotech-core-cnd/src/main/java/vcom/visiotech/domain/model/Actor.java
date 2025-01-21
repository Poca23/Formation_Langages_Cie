// Actor.java
package vcom.visiotech.domain.model;

public class Actor {

    private String name;
    private int birthYear;
    private String nationality;

    public Actor(String name, int birthYear, String nationality) {
        this.name = name;
        this.birthYear = birthYear;
        this.nationality = nationality;
    }

    public String getName() {
        return name;
    }

    public int getBirthYear() {
        return birthYear;
    }

    public String getNationality() {
        return nationality;
    }

    public String getDetails() {
        return name + " (" + birthYear + "), " + nationality;
    }
}
