public class TypesPrimitifs {

    private String color;
    private String brand;
    private String model;

    public TypesPrimitifs(String color, String brand, String model) {
        this.color = color;
        this.brand = brand;
        this.model = model;
    }

    public String getColor() {
        return color;
    }

    public String getBrand() {
        return brand;
    }

    public String getModel() {
        return model;
    }

    public String getDetails() {
        return "A " + color + " " + brand + " " + model;

    }

    public static void main(String[] args) {
        TypesPrimitifs myCar = new TypesPrimitifs("red", "Toyota", "Corolla");
        System.out.println(myCar.getDetails());
    }
}
