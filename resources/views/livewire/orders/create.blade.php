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
                  <form wire:submit="save" class="row g-3">
                    
                    <div class="col-md-6">
                      <label for="inputOpc" class="form-label">No. OPC</label>
                      <input wire:model="form.opc_numb" type="text" name="opc_numb" class="form-control" id="inputOpc">
                      @error('form.opc_numb')
                        <small class="text text-danger d-block mt-1 show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </small>   
                        @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="inputProdNumb" class="form-label">No. Produk</label>
                      <input wire:model="form.prod_numb" type="text" name="prod_numb" class="form-control" id="inputProdNumb">
                      @error('form.prod_numb')
                        <small class="text text-danger d-block mt-1 show show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </small>   
                        @enderror
                    </div>
                    <div class="col-12">
                      <label for="inputProdName" class="form-label">Nama Produk</label>
                      <input wire:model="form.prod_name" type="text" name="prod_name" class="form-control" id="inputProdName" placeholder="YSLY-JZ ....">
                      @error('form.prod_name')
                        <small class="text text-danger d-block mt-1  show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </small>   
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputCustomer" class="form-label">Customer</label>
                      <input wire:model="form.customer" type="text" name="customer" class="form-control" id="inputCustomer">
                      @error('form.customer')
                        <small class="text text-danger d-block mt-1 show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </small>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="inputLenght" class="form-label">Length</label>
                      <input wire:model="form.length_order" type="text" name="length_order" class="form-control" id="inputLenght">
                      @error('form.length_order')
                        <small class="text text-danger d-block mt-1 show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </small>   
                      @enderror
                    </div>
                    <div class="col-6">
                      <label for="inputReqCustomer" class="form-label">Request Customer</label>
                      <input wire:model="form.req_customer" type="date" name="req_customer" class="form-control" id="inputReqCustomer">
                      @error('form.req_customer')
                        <small class="text text-danger d-block mt-1 show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </small>   
                      @enderror
                    </div>
                    <div class="col-md-6">
                      <label for="inputDateOrder" class="form-label">Order Date</label>
                      <input wire:model="form.order_date" type="date" name="order_date" class="form-control" id="inputDateOrder">
                      @error('form.order_date')
                        <small class="text text-danger d-block mt-1 show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                          {{ $message }}
                        </small>   
                      @enderror
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
