package org.cnd.projectcnd;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.web.bind.annotation.GetMapping;

@SpringBootApplication
public class ProjectCndApplication {

    public static void main(String[] args) {

        SpringApplication.run(ProjectCndApplication.class, args);
    }

    @GetMapping("/hello")
    public String sayHello() {
        return "Coucou ma biche";
    }
}
