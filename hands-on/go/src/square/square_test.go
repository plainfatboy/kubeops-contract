package square

import "testing"

func TestSquare(t *testing.T){
    got := Square(3)
    want := 9

    if got != want {
        t.Errorf("got %q, wanted %q", got, want)
    }
}