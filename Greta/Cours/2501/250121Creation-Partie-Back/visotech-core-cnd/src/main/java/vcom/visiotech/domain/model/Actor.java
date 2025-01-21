package vcom.visiotech.domain.model;

import java.time.LocalDate;

public class Actor {

    private String name;
    private String nationality;
    private LocalDate birthDate;
    private int birthYear;

    public Actor(String name, int birthYear, String nationality) {
        this.name = name;
        this.birthYear = birthYear;
        this.nationality = nationality;
        this.birthDate = LocalDate.of(birthYear, 1, 1);
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
