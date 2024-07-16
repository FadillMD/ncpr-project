<div>
    <main id="main" class="main">

        <div class="pagetitle">
          <h1>Create Order</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Pages</li>
              <li class="breadcrumb-item active">Create Order</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->
    
        <section class="section">
          <div class="row">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Input Order Baru</h5>
    
                  <!-- Multi Columns Form -->
                  <form class="row g-3">
                    
                    <div class="col-md-6">
                      <label for="inputOpc" class="form-label">No. OPC</label>
                      <input type="text" name="opc_numb" class="form-control" id="inputOpc">
                    </div>
                    <div class="col-md-6">
                      <label for="inputProdNumb" class="form-label">No. Produk</label>
                      <input type="text" name="prod_numb" class="form-control" id="inputProdNumb">
                    </div>
                    <div class="col-12">
                      <label for="inputProdName" class="form-label">Nama Produk</label>
                      <input type="text" name="prod_name" class="form-control" id="inputProdName" placeholder="YSLY-JZ ....">
                    </div>
                    <div class="col-6">
                      <label for="inputCustomer" class="form-label">Customer</label>
                      <input type="text" name="customer" class="form-control" id="inputCustomer">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">City</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form><!-- End Multi Columns Form -->
    
                </div>
              </div>
            </div>
        </section>

  </main><!-- End #main -->
</div>
