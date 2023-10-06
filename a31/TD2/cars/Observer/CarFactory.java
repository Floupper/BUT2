package cars.Observer;

public class CarFactory {

    public CarFactory() {
    }

    public Car createSubaru() {
        return new Subaru();
    }

    public Car createJeep() {
        return new Jeep();
    }

    public Car createFiatMultipla() {
        return new FiatMultipla();
    }
}
