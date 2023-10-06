package cars.Exo2;

public class SwitchGermany implements SwitchColorStrategy {
    private LightColor previousColor;

    public SwitchGermany(LightColor currentColor){
        if (currentColor == LightColor.ORANGE){
            this.previousColor = LightColor.GREEN;
        } else {
            this.previousColor = currentColor;
        }
    }

    @Override
    public LightColor switchColor(LightColor currentColor) {
        LightColor newColor = currentColor;
        switch (currentColor){
            case GREEN:
            case RED:
                previousColor = currentColor;
                newColor = LightColor.ORANGE;
                break;
            case ORANGE:
                if (previousColor == LightColor.RED){
                    newColor = LightColor.GREEN;
                } else {
                    newColor = LightColor.RED;
                }
                break;
            default:
                break;
        }
        return newColor;
    }
}