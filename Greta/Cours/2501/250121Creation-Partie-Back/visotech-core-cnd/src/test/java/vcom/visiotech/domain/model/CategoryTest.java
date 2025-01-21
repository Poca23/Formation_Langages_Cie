// CategoryTest.java
package vcom.visiotech.domain.model;

public class CategoryTest {

    public static void main(String[] args) {
        Category category = new Category("Action", "High-energy movies with stunts and fights");

        System.out.println("Category Name: " + category.getName());
        System.out.println("Category Description: " + category.getDescription());
        System.out.println("Details: " + category.getDetails());
    }
}
