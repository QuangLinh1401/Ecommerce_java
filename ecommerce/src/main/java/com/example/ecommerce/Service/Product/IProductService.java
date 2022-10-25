package com.example.ecommerce.Service.Product;

import com.example.ecommerce.DTO.Product.ProductDto;
import com.example.ecommerce.Exception.ProductNotExistsException;
import com.example.ecommerce.Model.Category;
import com.example.ecommerce.Model.Product;

import java.util.List;

public interface IProductService {

    static ProductDto getDtoFromProduct(Product product) {
        ProductDto productDto = new ProductDto(product);
        return productDto;
    }

    static Product getProductFromDto(ProductDto productDto, Category category) {
        Product product = new Product(productDto, category);
        return product;
    }

    List<ProductDto> listProducts();

    void addProduct(ProductDto productDto, Category category);

    void updateProduct(Integer productID, ProductDto productDto, Category category);

    Product getProductById(Integer productId) throws ProductNotExistsException;
}
