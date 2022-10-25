package com.example.ecommerce.Service.Product;

import com.example.ecommerce.DTO.Product.ProductDto;
import com.example.ecommerce.Exception.ProductNotExistsException;
import com.example.ecommerce.Model.Category;
import com.example.ecommerce.Model.Product;
import com.example.ecommerce.Repository.ProductRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Service
public class ProductService implements IProductService{

    @Autowired
    private ProductRepository productRepository;

    @Override
    public List<ProductDto> listProducts() {
        List<Product> products = productRepository.findAll();
        List<ProductDto> productDtos = new ArrayList<>();
        for(Product product : products) {
            ProductDto productDto = IProductService.getDtoFromProduct(product);
            productDtos.add(productDto);
        }
        return productDtos;
    }

    @Override
    public void addProduct(ProductDto productDto, Category category) {
        Product product = IProductService.getProductFromDto(productDto, category);
        productRepository.save(product);
    }

    @Override
    public void updateProduct(Integer productID, ProductDto productDto, Category category) {
        Product product = IProductService.getProductFromDto(productDto, category);
        product.setId(productID);
        productRepository.save(product);
    }


    @Override
    public Product getProductById(Integer productId) throws ProductNotExistsException {
        Optional<Product> optionalProduct = productRepository.findById(productId);
        if (!optionalProduct.isPresent())
            throw new ProductNotExistsException("Product id is invalid " + productId);
        return optionalProduct.get();
    }
}
