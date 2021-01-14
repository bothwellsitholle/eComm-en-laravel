@extends('master')
@section("content")
    <div class="custom-product mt-4">
        <div class="col-sm-10">
            <br><br>
            <table class="table">
                <tbody>
                  <tr>
                    <td>Amount</td>
                    <td>$ {{ $total }}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>$10</td>
                  </tr>
                   <tr>
                    <td>Total Amount</td>
                    <td>${{ $total + 10 }}</td>
                  </tr>
                </tbody>
              </table>
              <div>
                <form action="/action_page.php">
                    <div class="form-group">
                    <textarea type="text" class="form-control" name="address"c ols="30" rows="10" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="payment">Payment Method:</label><br>
                      <label class="radio-inline"><input type="radio" name="optradio" checked>Credit Card</label>
                    <label class="radio-inline"><input type="radio" name="optradio">EFT</label>
                    <label class="radio-inline"><input type="radio" name="optradio">On delivery</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Order Now</button>
                  </form>
              </div>
        </div>
   </div>
@endsection


   






