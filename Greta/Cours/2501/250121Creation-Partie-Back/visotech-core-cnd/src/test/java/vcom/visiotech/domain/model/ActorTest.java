package vcom.visiotech.domain.model;

import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;

public class ActorTest {

    @Test
    public void testActorConstructor() {
        Actor actor = new Actor("Leonardo DiCaprio", 1974, "American");

        assertEquals("Leonardo DiCaprio", actor.getName());
        assertEquals(1974, actor.getBirthYear());
        assertEquals("American", actor.getNationality());
    }

    @Test
    public void testGetDetails() {
        Actor actor = new Actor("Leonardo DiCaprio", 1974, "American");

        // Assuming the getDetails method returns: "Leonardo DiCaprio (1974), American"
        assertEquals("Leonardo DiCaprio (1974), American", actor.getDetails());
    }
}
