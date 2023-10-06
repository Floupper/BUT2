package cars.Observer;

public abstract class Car {
    private int fuel;

    public void refuel() {
        fuel = 100;
    }

    public abstract String honk();

    public abstract String speedUp();
}
