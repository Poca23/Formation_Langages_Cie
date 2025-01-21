package vcom.visiotech.domain.model;

public class Film {

    private String title;
    private int releaseYear;
    private int duration;

    public Film(String title, int releaseYear, int duration) {
        this.title = title;
        this.releaseYear = releaseYear;
        this.duration = duration;
    }


    public String getTitle() {
        return title;
    }


    public int getReleaseYear() {
        return releaseYear;
    }


    public int getDuration() {
        return duration;
    }


    public String getDetails() {
        return title + " (" + releaseYear + "), " + duration + " minutes";
    }
}
