package cars.Exo2;

public class SwitchFrance implements SwitchColorStrategy{
    public SwitchFrance() {

    }

    @Override
    public LightColor switchColor(LightColor currentColor) {
        switch (currentColor){
            case RED:
                return LightColor.GREEN;
            case GREEN:
                return LightColor.ORANGE;
            case ORANGE:
                return LightColor.RED;
            default:
                return currentColor;
        }
    }
}